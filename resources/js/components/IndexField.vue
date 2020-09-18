<template>
    <div v-if="shouldDisplayAsHtml" v-html="field.value"></div>
    <span v-else>{{ field.value }}</span>
</template>

<script>
    export default {
        props: ['resourceName', 'field'],

        computed: {
            shouldDisplayAsHtml() {
                return this.field.asHtml
            }
        }
    };
</script>
