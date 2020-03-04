<template>
    <div>
        <div class="w3-row-padding">
            <br>
            <div class="w3-col m12">
                <div class="w3-card w3-round w3-white">
                    <div class="w3-container w3-padding">
                        <h6 class="w3-opacity">Ask Any Question From Us:</h6>
                        <p contenteditable="true" class="w3-border w3-padding">Write Something...</p>
                        <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i>Send</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="w3-container w3-card w3-grey w3-round w3-margin" v-for="question in questions">
            <br>
            <span class="w3-right w3-opacity">{{ postedOn(question) }}</span>
            <h4>{{ question.user.name }}</h4><br>
            <hr class="w3-clear">
            <p v-text="question.question_body"></p>
            <p class="w3-white w3-margin w3-padding" v-text="question.answer_body"></p>
        </div>
    </div>
</template>

<script type="text/javascript">
    import Question from '../models/Question';
    import moment from 'moment';

    export default {
        data() {
            return {
                questions: []
            }
        },
        created() {
            Question.all(questions => this.questions = questions);
        },
        methods:{
            postedOn(question){
                return moment(question.created_at).fromNow();
            }
        }
    }
</script>

<style scoped>

</style>
