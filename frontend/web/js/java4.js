$(document).ready(function() { 
  //1. открытие/скрытие номаризованной матрицы
  $('#triggerNM').click(function() {
      $('#triggerNM').text('Сховати нормалiзовану матрицю');
    $('#box1').toggle('slow', function() {
      $('#triggerNM').text('Показати нормалiзовану матрицю');
    });
  });

  //2. открытие/скрытие оценок по диплому
  $('#triggerOD').click(function() {
    $('#box2').toggle('slow', function() {
      $('#triggerOD').text('Сховати оцiнки за дипломами');
    });
      $('#triggerOD').text('Показати оцiнки за дипломами');
  }); 

  //3. открытие/скрытие оценок табличка
  $('#triggerOcenki').click(function() {
      $('#triggerOcenki').text('Сховати оцінки з дисциплін');
    $('#box3').toggle('slow', function() {
      $('#triggerOcenki').text('Показати оцінки з дисциплін');
    });
  }); 
 
  //4. открытие/скрытие розрахунок коефіцієнтів
  $('#triggerDelta').click(function() {
      $('#triggerDelta').text('Сховати допоміжні розрахунки');
    $('#box4').toggle('slow', function() {
      $('#triggerDelta').text('Показати допоміжні розрахунки');
    });
  }); 

  //5. открытие/скрытие допоміжні розрахунки
  $('#triggerAlpha').click(function() {
      $('#triggerAlpha').text('Сховати допоміжні розрахунки &alpha;');
    $('#box5').toggle('slow', function() {
      $('#triggerAlpha').text('Показати допоміжні розрахунки &alpha;');
    });
  }); 

  //6. iнтерполяцiя
  $('#prediction').click(function(e) {
    $('#box-prediction').show(100);
    e.stopPropagation();
  });
});
 



