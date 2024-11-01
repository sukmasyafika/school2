// image
function previewImg() {
  const img = document.querySelector('#foto');
  const imgPreview = document.querySelector('#img-preview');

  const fileImg = new FileReader();

  // Jika ada file yang dipilih
  if (img.files[0]) {
    fileImg.readAsDataURL(img.files[0]);

    fileImg.onload = function (e) {
      // Set src dengan hasil pembacaan
      imgPreview.src = e.target.result;
      // Tampilkan gambar
      imgPreview.style.display = 'block';
    }
  }
}

// chart

// bar
const ctb = document.getElementById('barChart');

new Chart(ctb, {
  type: 'bar',
  data: {
    labels: ['TKJ', 'Multimedia', 'Manajemen Bisnis', 'RPL', 'Akuntansi'],
    datasets: [{
      label: 'Data Jurusan',
      data: [38, 36, 42, 45, 39],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    },
    plugins: {
      legend: {
        display: false
      }
    }
  }
});

// lineChart
const ctl = document.getElementById('lineChart');

new Chart(ctl, {
  type: 'line',
  data: {
    labels: ['2019', '2020', '2021', '2022', '2023', '2024'],
    datasets: [{
      label: 'Data Siswa',
      data: [100, 110, 90, 105, 130, 113, 126],
      fill: false,
      borderColor: 'rgb(54, 162, 235)',
      tension: 0.1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    },
    plugins: {
      legend: {
        display: false
      }
    }
  }
});

// doughnut
const ctd = document.getElementById('doughnutChart');
const data = {
  labels: [
    'Guru',
    'Staf',
    'Satpam'
  ],
  datasets: [{
    label: 'Data Tenaga',
    data: [100, 25, 2],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
};

new Chart(ctd, {
  type: 'doughnut',
  data: data
});
