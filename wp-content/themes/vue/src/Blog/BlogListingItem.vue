<template>
    <base-card>
        <template #header>
            <h2>{{ title }}</h2>
        </template> 
        <slot name="excerpt">
            <div v-html="content"></div>
        </slot>
    </base-card>
</template>

<script>
export default {
    props: ['categories', 'title', 'content']
}
</script>