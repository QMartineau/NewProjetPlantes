class Question {
  constructor(text, choices, answer) {
    this.text = text;
    this.choices = choices;
    this.answer = answer;
  }
  isCorrectAnswer(choice) {
    return this.answer === choice;
  }
}
let questions = [
  new Question("De quel genre est Abelia Edward Goucher?", ["Cotinus", "Abelia", "Exochorda", "Cytisus"], "Abelia"),

  new Question("Quelle est le cultivar de l'Arbuste aux papillons Honeycomb?", ["Honeycomb","Royal Purple", "Edward Goucher", "Compactus"], "Honeycomb"),

  new Question("Quelle est l'espece de l'Arbre à perruque Royal Purple?", ["Osmanthus","Coggygria", "Hibiscus", "Exochorda"], "Coggygria"),

  new Question("Quelle est le nom de la plante qui a comme genre Cytisus et comme espece Cytisus?", ["Laurier des marais","Badiane de Floride", "Rose de Sharon", "Genêt à balais"], "Genêt à balais"),

  new Question("De quel genre est la fleur Deutzia gracilis ?", ["Paeonia","Passiflora", "Rhaphiolepi", "Deutzia"], "Deutzia"),

  new Question("Quelle est l'espece de l'Arbre aux perles The Bridge?", ["Macrantha","Suffruticos", "Polifolia", "Calycinum"], "Macrantha"),

  new Question("Quelle est le cultivar de la Fusain ailé nain Euonymus Compactus ?", ["Honeycomb","Leonard", "Compactus", "The Bridge"], "Compactus"),

  new Question("Quelle est l'espece de La barbe d'Aaron?", ["Laciniata","Weyeriana", "Syriacus", "Calycinum"], "Syriacus"),

  new Question("De quel genre est Rose de Sharon?", ["Buddleia","Hypericum", "Cytisus", "Euonymus"], "Hypericum"),

  new Question("Quelle est le cultivar de la Badiane de Floride ?", ["Melafan","Aucun", "Sorghoth", "Asphoria"], "Aucun"),

  new Question("Quelle est l'espece de la Laurier des montagnes ?", ["Syriacus","Latifolia", "thuerpie", "Calsifone"], "Latifolia"),

  new Question("De quel genre est la Laurier des marais ?", ["Kalmie","Kalmia", "Udile", "kulmia"], "Kalmia"),

  new Question("Quelle est le cultivar de Corête du Japon Pleniflora ?", ["Aucun","Pleniflora", "Menphys", "sylfy"], "Pleniflora"),

  new Question("Quelle est l'espece de la Fleur à franges rose ?", ["Cosalius","Syriacus", "Chinence", "Chinense"], "Chinense"),

  new Question("De quel genre est la Magnolia Leonard Messel ?", ["Sormonsie","Magnolia", "Baratie", "rofusk"], "Magnolia"),

  new Question("Quelle est le cultivar de l'Osmanthe de Delavay ?", ["kolecus","Osmanthus", "Aucun", "saphiria"], "Aucun"),

  new Question("Quelle est l'espece de la Pivoine arbustive ?", ["Suffruticos","Helliasecus", "Syriacus", "Suffrutise"], "Suffruticos"),

  new Question("De quel genre est Passiflore bleue ?", ["Passiflora","Philaflora", "Giseng", "Mephielotus"], "Passiflora"),

  new Question("Quelle est le cultivar de l'Aubépine Indienne Pink Lady ?", ["Pink Lady","Red sweet", "Elegif", "Pink apple"], "Pink Lady"),

  new Question("Quelle est l'espece de la Lilas persil ?", ["Suffruticos","Aucun", "Laciniata", "Syriacus"], "Laciniata")
];

class Quiz {
  constructor(questions) {
    this.score = 0;
    this.questions = questions;
    this.currentQuestionIndex = 0;
  }
  getCurrentQuestion() {
    return this.questions[this.currentQuestionIndex];
  }
  guess(answer) {
    if (this.getCurrentQuestion().isCorrectAnswer(answer)) {
      this.score++;
    }
    this.currentQuestionIndex++;
  }
  hasEnded() {
    return this.currentQuestionIndex >= this.questions.length;
  }
}

// Regroupement de toutes les fonctions pour l'affichage
const display = {
  elementShown: function(id, text) {
    let element = document.getElementById(id);
    console.log(element);
    element.innerHTML = text;
  },
  endQuiz: function() {
    endQuizHTML = `
      <h1>Quiz terminé !</h1>
      <h3> Votre score est de : ${quiz.score} / ${quiz.questions.length}</h3>`;
    this.elementShown("quiz", endQuizHTML);
  },
  question: function() {
    this.elementShown("question", quiz.getCurrentQuestion().text);
  },
  choices: function() {
    let choices = quiz.getCurrentQuestion().choices;

    guessHandler = (id, guess) => {
      document.getElementById(id).onclick = function() {
        quiz.guess(guess);
        quizApp();
      }
    }
    // affichage des choix et gérer la réponse
    for(let i = 0; i < choices.length; i++) {
      this.elementShown("choice" + i, choices[i]);
      guessHandler("guess" + i, choices[i]);
    }
  },
  progress: function() {
    let currentQuestionNumber = quiz.currentQuestionIndex + 1;
    this.elementShown("progress", "Question " + currentQuestionNumber + " sur " + quiz.questions.length);
  },
};

// Affichage quiz
quizApp = () => {
  if (quiz.hasEnded()) {
    display.endQuiz();
  } else {
    display.question();
    display.choices();
    display.progress();
  } 
}
// Créé un quiz
let quiz = new Quiz(questions);
quizApp();