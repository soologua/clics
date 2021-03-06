# author   : Johann-Mattis List
# email    : mattis.list@uni-marburg.de
# created  : 2013-10-29 17:36
# modified : 2014-03-13 08:28
"""
Compute subsets of the graphs with help of community detection analyses.
"""

__author__="Johann-Mattis List"
__date__="2014-03-13"


import igraph as ig
import networkx as nx
from clics_lib.gml2json import graph2json
from sys import argv
import numpy as np

# read the graph from gml
g = ig.read("output/clics_b.gml")

glen = len(g.vs)

if len(argv) == 1:
    # analyze graph with infomap
    coms = g.community_edge_betweenness(directed=False,weights='weight')
    
    # get communities, currently we force algorithm to get us 100 communities for
    # convenience
    communities = coms.as_clustering(250)
elif 'infomap' in argv:
    communities = g.community_infomap(edge_weights='normalized_weight', trials=50)

print('[i] Computed communities.')

# copy graph to networkx
newg = nx.Graph()

for edge in g.es:

    s,t = edge.source, edge.target

    if s not in newg:
        label = g.vs[s]['label']
        key = g.vs[s]['key']
        body_part = int(g.vs[s]['body_part'])
        swadesh100 = int(g.vs[s]['swadesh100'])

        newg.add_node(
                label,
                key=key,
                body_part=body_part,
                swadesh100=swadesh100
                )
    
    if t not in newg:
        label = g.vs[t]['label']
        key = g.vs[t]['key']
        body_part = int(g.vs[t]['body_part'])
        swadesh100 = int(g.vs[t]['swadesh100'])

        newg.add_node(
                label,
                key=key,
                body_part=body_part,
                swadesh100=swadesh100
                )

    
    # get labels again for consistency
    labelS = g.vs[s]['label']
    labelT = g.vs[t]['label']

    try:
        newg[s][t]
    except KeyError:
        newg.add_edge(
                labelS,
                labelT,
                weight = edge['normalized_weight'],
                languages = edge['languages'],
                families = edge['families']
                )

# calculate scaled weights for edge widths
all_weights = []
for nA,nB,d in newg.edges(data=True):

    w = int(d['weight']+0.5)

    all_weights += [w - w % 10]

u_weights = sorted(set(all_weights))
weight_scale = dict(zip(u_weights,np.linspace(1.5,15,len(u_weights))))
for nA,nB,d in newg.edges(data=True):
    w = int(d['weight']+0.5)
    w = w - w % 10
    d['edge_width'] = weight_scale[w]

comms = []
for i,s in enumerate(communities.subgraphs()):

    for node in s.vs:
        idx = node['label']
        newg.node[idx]['community'] = i+1

    comms += [i+1]

# iterate over communities in order to get a dictionary of community-name and
# community-number

# get nodes with communities
nodes = [n for n in newg.nodes(data=True) if 'community' in n[1]]

cdict = {}
for c in comms:
    subG = newg.subgraph(
            [n[0] for n in nodes if n[1]['community'] == c]
            )
    # get node with highest degree
    d = sorted(subG.degree().items(),key=lambda x:x[1],reverse=True)[0][0]

    if '/' in d:
        d = d.replace('/','-')
    
    cdict[c] = 'cluster_{0}_{1}'.format(c,d)


for s,t,d in newg.edges(data=True):
    
    cS = newg.node[s]['community']
    cT = newg.node[t]['community']

    if cS == cT: #newg.node[s]['community'] == newg.node[t]['community']:
        pass
    else:
        # get community-keys
        kS = cdict[cS]
        kT = cdict[cT]
        kSk = kS.split('_')[-1]
        kTk = kT.split('_')[-1]
        
        try:
            newg.node[s]['out_edge'] += [(kT,t,d['families'], d['weight'], kTk)]
        except:
            newg.node[s]['out_edge'] = [(kT,t,d['families'], d['weight'], kTk)]
        
        try:
            newg.node[t]['out_edge'] += [(kS,s,d['families'], d['weight'], kSk)]
        except:
            newg.node[t]['out_edge'] = [(kS,s,d['families'], d['weight'], kSk)]

for node,data in newg.nodes(data=True):

    if 'out_edge' in data:
        data['out_edge'] = [s for s in sorted(
            data['out_edge'], 
            key=lambda x:x[3], # chance this key to modify the weights
            reverse=True
            ) if s[2] > 3]
    else:
        data['out_edge'] = []
    

nx.write_gml(newg,'output/clics_communities.gml')
graph2json(newg,'output/clics_communities')

# get nodes with communities
nodes = [n for n in newg.nodes(data=True) if 'community' in n[1]]


import matplotlib.pyplot as plt
gcoms = []

import os
os.system('git rm website/clics.de/data/communities/*.json')
os.system('rm website/clics.de/data/communities/*.json')

# write all communities to separate json-graphs, write names to file
f = open('output/communitiesNew.csv','w')
f2 = open('output/communitiesNewCluster.csv', 'w')
f3 = open('output/nodes2communities.csv', 'w')
f.write('name\n')
for c in comms:
    
    subG = newg.subgraph(
            [n[0] for n in nodes if n[1]['community'] == c]
            )

    for n,d in subG.nodes(data=True):
        f3.write('{0}\t{1}\t{2}\t{3}\t{4}\n'.format(
            d['key'],
            n,
            d['community'],
            cdict[d['community']],
            cdict[d['community']].split('_')[-1]
            ))
    ## get node with highest degree
    #d = sorted(subG.degree().items(),key=lambda x:x[1],reverse=True)[0][0]

    
    #if '/' in d:
    #    d = d.replace('/','_')
    graph2json(subG, 'website/clics.de/data/communities/'+cdict[c]) #'xcommunities/cluster_{0}_{1}'.format(c,d))
    print("[i] Converting community number {0} / {1} ({2} nodes).".format(c,cdict[c].replace('cluster_',''),len(subG.nodes())))
            
    
    f.write(cdict[c]+'.json\n') #.format(c,d))

    gcoms += [len(subG)]
    
    f2.write('---'+cdict[c]+'---\n')
    for node in subG.nodes():
        f2.write(node+'\n')
    
    f2.write('\n')

f.close()
f2.close()
f3.close()


glarge = [g for g in gcoms if g >= 5]
print(sum(glarge),len(glarge))
plt.hist(gcoms,bins=40)
plt.savefig('test.svg')
plt.clf()

a = """
Communities:    {0}
Coms > 5   :    {1}
Coverage   :    {2}, {3:.2f}
Concepts   :    {4}
Conc/Com   :    {5:.2f}
""".format(
        (glen - sum(gcoms)) + len(gcoms),
        len(glarge),
        sum(glarge),
        sum(glarge) / len(newg),
        glen,
        sum(gcoms) / len(gcoms)
        )
print(a)
with open('statsoncdec.stats','w') as f:
    f.write(a)

os.system('git add website/clics.de/data/communities/*.json')
with open('output/clics_c.gml','w') as f:
    for line in nx.generate_gml(newg):
        f.write(line+'\n')
