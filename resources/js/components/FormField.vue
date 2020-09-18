<template>
    <default-field :field="field">
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
        }
    }
};
</script>
