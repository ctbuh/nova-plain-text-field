<template>
    <default-field :field="field" :full-width-content="isFullWidth">
        <template slot="field">
            <div v-if="shouldDisplayAsHtml" v-html="field.value"></div>
            <span v-else class="inline-block pt-2 leading-tight">{{ field.value }}</span>
        </template>
    </default-field>
</template>

<script>
import { FormField } from 'laravel-nova';

export default {
    mixins: [FormField],

    props: ['field'],

    computed: {
        shouldDisplayAsHtml() {
            return this.field.asHtml
        },
        isFullWidth(){
            return this.field.fullWidth
        }
    }
};
</script>
