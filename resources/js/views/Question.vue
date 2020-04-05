<template>
    <div>
        <div class="w3-row-padding">
            <br>
            <div class="w3-col m12">
                <div class="w3-card w3-round w3-white">
                    <!--When Complete QuestionsTableSeeder We Show Them-->
                    <add-to-stream  @completed="addQuestion"></add-to-stream>
                </div>
            </div>
        </div>

        <div class="w3-container w3-card w3-grey w3-round w3-margin" v-for="question in questions">
            <br>
            <!--Use Filter For Show Date And Capitalize-->
            <span class="w3-right w3-opacity">{{ question.created_at | ago | capitalize }}</span>
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
    import AddToStream from '../components/AddToStream';

    export default {
        //Declare Component
        components: {
            AddToStream
        },
        data() {
            return {
                questions: []
            }
        },
        //Using Filter For Show & Capitalize Date
        filters: {
            ago(date) {
                return moment(date).fromNow();
            },
            capitalize(value) {
                return value.toUpperCase();
            }
        },
        //Get All QuestionsTableSeeder Form QuestionsTableSeeder Class
        created() {
            Question.all(questions => this.questions = questions);
        },
        methods:{
            //Store QuestionsTableSeeder
            addQuestion(question){
                this.questions.unshift(question);
                alert('Your QuestionsTableSeeder Submit We Will Answer Very Soon');

                window.scrollTo(0, 0);
            }
        }
    }
</script>

<style scoped>

</style>
