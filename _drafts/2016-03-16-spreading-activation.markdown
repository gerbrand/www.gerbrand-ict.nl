---
layout: post
title:  "Spreading activation on Neo4j"
date:   2016-03-16 11:35:00
---
How does the human brain work? How do thoughts pop up in our conscience? Just thinking about the question is confusion enough. Maybe our brain works as a semantic network as explained by [Carole Yue at Kahn Academy](https://www.khanacademy.org/science/health-and-medicine/executive-systems-of-the-brain/cognition-2014-03-27T18:40:04.738Z/v/semantic-networks-and-spreading-activation).
Try for yourself: think of a bird? You now probably think a sparrow, duck. Think of an extinct animal? Now you might think of the dodo, mammoth or dinosaur. Animal living on the south pole: a penguin? Or polar bear? Facts, ideas, memories in our brain are interconnected, not hierarchical like files and directories on a harddrive, but as a *graph*: a network of interconnected nodes.

Inspired by this idea is a computer algorithm: [spreading activation](https://en.wikipedia.org/wiki/Spreading_activation).

Using [Jupyter Notebook](http://jupyter.readthedocs.org/en/latest/running.html#running) with the [cypher extension](https://github.com/versae/ipython-cypher) we can demonstrate the graph ourself
```
create 
(_0`  {`name`:"Bird"}),
(_1   {`name`:"Duck"}),
(_2  {`name`:"Dodo"}),
(_3  {`name`:"Mammoth"}),
(_4  {`name`:"Dinosaur"}),
(_5  {`name`:"Penguin"}),
(_5  {`name`:"Polar bear"}),
_1->_0
````
