import Chart from 'chart.js/auto'
import ChartDataLabels from 'chartjs-plugin-datalabels';

import './Components/Organigramm'

Chart.register(ChartDataLabels);
Chart.defaults.font.size = 14
document.querySelectorAll<HTMLCanvasElement>('canvas.chartjs').forEach(div => {
  const config = JSON.parse(div.getAttribute('data-config'))
  new Chart(div, config)
})