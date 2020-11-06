window.onload = function() {
  var ctx = document.getElementById('myChart');
  var myChart = new Chart(ctx, {
      type: 'radar',
      data: {
          labels: ['開放性', '神経症的傾向', '社交性', '勤勉性', '協調性'],
          datasets: [{
              label: '性格分析',
              data:[22,11,21,13,11],
              backgroundColor: 'RGBA(225,95,150, 0.5)',
              borderColor: 'RGBA(225,95,150, 0.5)',
              borderWidth: 1,
              pointBackgroundColor: 'RGB(46,106,177)'
          }]
      },
      options: {
         title: {
             display: true,
             text: '性格分析'
         },
         scale: {
              ticks:{
              min: -30,
              max:30,
              stepSize: 10,
          }
         }
      }
  });
}