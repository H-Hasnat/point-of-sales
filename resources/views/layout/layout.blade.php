<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
  <link rel="shortcut icon" type="image/png" href="images/logos/seodashlogo.png" />
  <link rel="stylesheet" href="css/styles.min.css" />
  {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/axios.min.js"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>

  <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="libs/simplebar/dist/simplebar.js"></script>
  <script src="js/sidebarmenu.js"></script>
  <script src="js/app.min.js"></script>
  <script src="js/dashboard.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="js/config.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>



</head>

<style>
    #pro_img{
        height: 80px;
        width: 100px;
    }

    .pro_image{
        height: 300px;
        width: 300px;
    }

    /* #DataTable1 {
    width: ;
    /* max-width: 500px; Adjust based on the PDF width
    /* margin: 0 auto;
    padding: 20px; Optional padding*/
/* } */

/* #pdfContent{
    height: 100vh;
    width: 90%;
} */

.category-btn {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 150px;
      height: 150px;
      border-radius: 50%;
      background-color: #f8f9fa;
      font-size: 1.2rem;
      color: #333;
      transition: background-color 0.3s;
    }
    .category-btn:hover {
      background-color: #e9ecef;
    }
    .product-card img {
      height: 150px;
      object-fit: cover;
    }
    .review-card {
      background-color: #f8f9fa;
      border-radius: 10px;
      padding: 1rem;
    }


</style>

<body>


    @yield('content')

    <script>
        // const products = {
        //   restaurant: [
        //     { name: 'Grilled Chicken', description: 'Delicious grilled chicken with herbs.', image: 'chicken.jpg' },
        //     { name: 'Pasta', description: 'Creamy pasta with parmesan.', image: 'pasta.jpg' }
        //   ],
        //   foodShop: [
        //     { name: 'Fresh Bread', description: 'Baked daily with fresh ingredients.', image: 'bread.jpg' },
        //     { name: 'Milk', description: 'Organic and fresh.', image: 'milk.jpg' }
        //   ],
        //   sweetShop: [
        //     { name: 'Chocolate Cake', description: 'Rich and creamy chocolate delight.', image: 'cake.jpg' },
        //     { name: 'Donuts', description: 'Soft and glazed with sweetness.', image: 'donuts.jpg' }
        //   ]
        // };

        function showProducts(category) {
          const productDisplay = document.getElementById('productDisplay');
          productDisplay.innerHTML = '';
          products[category].forEach(product => {
            const productCard = `
              <div class="col-md-4">
                <div class="card product-card mb-4">
                  <img src="${product.image}" class="card-img-top" alt="${product.name}">
                  <div class="card-body">
                    <h5 class="card-title">${product.name}</h5>
                    <p class="card-text">${product.description}</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                  </div>
                </div>
              </div>`;
            productDisplay.insertAdjacentHTML('beforeend', productCard);
          });
        }
      </script>

  </body>

  </html>
