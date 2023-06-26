<template>
    <div class="shadow-sm">
        <header>
            <slot name="header">
                <h3 v-if="title" class="font-semibold">{{ title }}</h3>
            </slot>
        </header>
        <slot></slot>
    </div>
</template>

<script>
export default {
    props: {
        title: {  
            type: String,
            default: null
        }
    },

    mounted() {
        console.log(this.title);
    }
}
</script>
