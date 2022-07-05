<?php
//Hash (object)%n

//The server may fail from each of the following
//Cache server m is down? n-1
//Cache server m is up? n+1
//After hardware becomes more powerful, you may want to add more nodes and the algorithm above
//may not work either

//Monotonicity means that if some content has been allocated to the corresponding buffer through hash,
//and a new buffer has been added to the system. The result of the hash should be able to ensure that
//the original allocated content can be mapped to the new buffer instead of other buffers in the old buffer set.

// 1. Circular Hash Space

//https://developpaper.com/consistent-hash-algorithm-for-php/

