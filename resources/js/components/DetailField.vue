<template>
    <PanelItem :index="index" :field="field">
        <template #value>
            <div class="rs-progress-bar-wrapper">
                <span class="rs-progress-bar-value">{{ field.value }}</span>
                <div class="rs-flex-grow-1">
                    <div class="rs-progress-bar-container">
                        <div
                            class="rs-progress-bar-indicator"
                            :style="{
                                width: `${orginal}%`,
                            }"
                        ></div>
                    </div>
                </div>
            </div>
        </template>
    </PanelItem>
</template>

<script>
export default {
    props: ["index", "resource", "resourceName", "resourceId", "field"],

    computed: {
        orginal() {
            if (this.field.original_value != undefined) {
                return this.field.original_value;
            }
            return this.field.value;
        },
    },
};
</script>
