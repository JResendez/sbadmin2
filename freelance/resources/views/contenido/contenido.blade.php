@extends('base')
@section('contenido')

<template v-if="menu==0">
    <dashboard></dashboard>
</template>

<template v-if="menu==1">
    <h1>item 1</h1>        
</template>

<template v-if="menu==2">
    <h1>item 2</h1>
</template>

<template v-if="menu==3">
    <h1>item 3</h1>        
</template>

<template v-if="menu==4">
    <h1>item 4</h1>        
</template>

<template v-if="menu==5">
    <h1>item 5</h1>        
</template>

<template v-if="menu==6">
    <h1>item 6</h1>        
</template>

<template v-if="menu==7">
    <h1>item 7</h1>        
</template>

<template v-if="menu==8">
    <h1>item 8</h1>        
</template>

<template v-if="menu==9">
    <h1>item 9</h1>        
</template>

<template v-if="menu==10">
    <h1>item 10</h1>        
</template>

<template v-if="menu==11">
    <h1>item 10</h1>        
</template>


@endsection