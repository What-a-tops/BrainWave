let questions = [
    {
        id : 1,
        question: 'This prophet was swallowed by a fish.',
        choices: {
            0 : 'Ben',
            1 : 'Raffy',
            2 : 'Saul',
            3 : 'Judas'
        },
        answer: 'a'
    },
    {
        id : 2,
        question: 'What animal was often used for transportation in the Bible?',
        choices: {
            0 : 'Camel or donkey',
            1 : 'Lamb',
            2 : 'Monkey',
            3 : 'Sheep'
        },
        answer: 'a'
    },
    {
        id : 3,
        question: 'What is another name for the Sermon on the Mount?',
        choices: {
            0 : 'The Gospel',
            1 : 'The Preach',
            2 : 'The Worship',
            3 : 'The beatitudes'
        },
        answer: 'a'
    },
    {
        id : 4,
        question: 'What did Jesus’ father do for a job?',
        choices: {
            0 : 'Preacher',
            1 : 'Carpenter',
            2 : 'Tax Collector',
            3 : 'Fisher'
        },
        answer: 'a'
    },
    {
        id : 5,
        question: 'Which of the apostles betrayed Jesus?',
        choices: {
            0 : 'Thomas',
            1 : 'Matteo',
            2 : 'Judas',
            3 : 'Paul'
        },
        answer: 'c'
    }
];

let qid = 0;
let count = 1;

$(function () {
    set_game();
    let x = document.getElementById("music");
    x.currentTime=0;
    x.loop=true;
    let play = x.play();

    x.volume = 0.2;
    if (play !== undefined) {
        play.then(_ => {
            // Automatic playback started!
            // Show playing UI.
            console.log(1)
        })
            .catch(error => {
                // Auto-play was prevented
                // Show paused UI.
                console.log(2)

            });
    }
});

function set_game() {
    console.log(qid);
    $("#app").fadeIn();
    console.log(questions[qid]);
    if (questions[qid] !== undefined) {
        set_question(questions[qid]);
        startTimer();
    } else {
        onTimesUp();
    }

}

function set_question(data) {
    let html =  '<div class="col-12">\n' +
    '            <h4 class="card-title lead">'+count+'. '+data.question+'</h4>\n' +
    '        </div>\n' +
    '        <div class="col-12">\n' +
    '            <div class="row">\n';

            _.forEach(data.choices, function (val, key) {
                html += '         <div class="col-6">\n' +
                '                    <div class="container-login100-form-btn m-t-5 p-b-5">\n' +
                '                        <button type="submit" class="content100-form-btn border-secondary btn-outline-secondary lead">\n' +
                                                val +
                '                        </button>\n' +
                '                    </div>\n' +
                '                </div>\n';
            });
    '            </div>\n';

    html += '</div>';

    $('#question_content').html(html);
}