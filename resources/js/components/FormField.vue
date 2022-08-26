<template>
    <DefaultField
        :field="field"
        :errors="errors"
        :show-help-text="showHelpText"
    >
        <template #field>
            <input :id="field.attribute" type="text" />
        </template>
    </DefaultField>
</template>

<script>
import { FormField, HandlesValidationErrors } from "laravel-nova";
import Slider from "./../Slider";

export default {
    data: () => ({
        slider: null,
    }),
    mixins: [FormField, HandlesValidationErrors],

    props: ["resourceName", "resourceId", "field"],

    mounted() {
        this.slider = new Slider({
            target: this.field.attribute,
            values: { min: this.field.min ?? 0, max: this.field.max ?? 100 },
            scale: false,
            set: [this.field.value],
            labels: false,
            step: this.field.step ?? 1,
            tooltip: true,
        });
    },

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.original ?? 0;
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.slider.getValue());
        },

        computed: {
            orginal() {
                if (this.field.original_value != undefined) {
                    return this.field.original_value;
                }
                return this.field.value;
            },
        },
    },
};
</script>
