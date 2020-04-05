<template>
    <div class="w3-container w3-padding">
        <h6 class="w3-opacity">Ask Any Question From Us:</h6>
        <!--Prevent Default Submit to Use Vue And axios for Store And Clear Form After Fix Validation Error and Active Submit Button-->
        <form @submit.prevent="onSubmit" @keydown="form.errors.clear()">
            <textarea style="width: 100%" class="w3-border w3-padding" placeholder="Write Something..."
                      v-model="form.question_body"></textarea>
            <span class="help danger"
                  v-if="form.errors.has('question_body')"
                  v-text="form.errors.get('question_body')"></span><br>
            <button type="submit" class="w3-button w3-theme"><i class="fa fa-pencil":disabled="form.errors.any()"></i>Send</button>
        </form>
    </div>
</template>

<script>
    export default {
        //Get New QuestionsTableSeeder
        data() {
            return {
                form: new Form({question_body: ''})
            };
        },
        //Pass QuestionsTableSeeder To Form Submit
        methods: {
            onSubmit() {
                this.form
                    .post('/question')
                    .then(question => this.$emit('completed', question));
            }
        }
    }
</script>

<style scoped>

</style>
