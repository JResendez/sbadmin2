<?php $__env->startSection('contenido'); ?>

<template v-if="menu==0">
    <dashboard></dashboard>
</template>

<template v-if="menu==1">
    <metodo_retiro></metodo_retiro>        
</template>

<template v-if="menu==2">

  <solicitudes_retiro></solicitudes_retiro>    
</template>

<template v-if="menu==3">   
    <log_retiro> </log_retiro> 
</template>

<template v-if="menu==4">
    <metodos_pago></metodos_pago>
</template>

<template v-if="menu==5">
    <log_pagos></log_pagos>
</template>

<template v-if="menu==6">
    <usuarios></usuarios>
</template>

<template v-if="menu==7">
    <h1>item 7</h1>        
</template>

<template v-if="menu==8">
    <tablero></tablero>
</template>

<template v-if="menu==9">
    <h1>item 9</h1>        
</template>

<template v-if="menu==10">
    <h1>item 10</h1>        
</template>

<template v-if="menu==11">
    <h1>item 11</h1>        
</template>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/final2/freelance/resources/views/contenido/contenido.blade.php ENDPATH**/ ?>