<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/quill/quill.snow.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/quill/quill.bubble.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/simple-datatables/style.css')?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">

  <style>
        section{
            position: relative;
            width: 100%;
            padding: 0px 8% 20px;
        }
        header h1{
            color: #8e44ad;
            font-size: 2em;
            margin:30px 0px
        }

    </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Inventory</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $this->session->userdata('name'); ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $this->session->userdata('name'); ?></h6>
              <span>Web Developer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo site_url('login/logout');?>">
                <i class="bi bi-box-arrow-right"></i>
                <span href="<?php echo site_url('login/logout');?>"> Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?php echo site_url('Dashboard');?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

     
      </li><!-- End Components Nav -->

      </li><!-- End Charts Nav -->

     
      </li><!-- End Icons Nav -->

     
      </li><!-- End Profile Page Nav -->

      
      </li><!-- End F.A.Q Page Nav -->

     
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo site_url('Olah_data');?>">
          <i class="bi bi-card-list"></i>
          <span>Olah data</span>
        </a>
      </li><!-- End Register Page Nav -->

     
      </li><!-- End Login Page Nav -->

     
      </li><!-- End Error 404 Page Nav -->

     
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo site_url('Dashboard');?>">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel olah data</h5>
             

              <!-- Table with stripped rows -->
              <button onclick="addProduct()">Add Product</button>
              <table id="tabel-data" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id barang</th>
                <th>Nama barang</th>
                <th>jumlah barang</th>
                <th>jenis barang</th>
                <th>harga barang</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
          

            </div><!-- End Customers Card -->

            <!-- Reports -->
           
                  <!-- Line Chart -->
                 
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
           
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
           
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
        
                </div><!-- End activity item-->

                
                </div><!-- End activity item-->

              
                </div><!-- End activity item-->

               
                </div><!-- End activity item-->

              
                </div><!-- End activity item-->

             
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
         
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
        
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
        
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
     
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/apexcharts/apexcharts.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/chart.js/chart.umd.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/echarts/echarts.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/quill/quill.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/simple-datatables/simple-datatables.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/tinymce/tinymce.min.js')?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js')?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js')?>"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>


    <script>
        let productsData = []; 
        let productToEdit; // Declare productToEdit here

        fetch('http://localhost/Api_crud_back_end_inv/Olah_data/readProducts')
            .then(res => res.json())
            .then(data => {
                productsData = data;
                displayProducts(data);
            });

      async function displayProducts(products) {
            let html = '';
            products.forEach((product, index) => {
                html += '<tr>';
                html += `<td>${product.id_barang}</td>
                          <td>${product.nama_barang}</td>
                            <td>${product.jumlah_barang}</td>
                            <td>${product.jenis_barang}</td>
                            <td>Rp${product.harga_barang}</td>
                            <td>
                                <button onclick="editProduct(${index})">Edit</button>
                                <button onclick="deleteProduct(${product.id_barang})">Delete</button>
                            </td>`;
                html += '</tr>';
            });
            document.querySelector('tbody').innerHTML = html;
            $('#tabel-data').DataTable();
        }

        document.addEventListener('click', function (event) {
        if (event.target.classList.contains('delete-button')) {
            const index = Array.from(event.target.parentElement.parentElement.parentElement.children).indexOf(event.target.parentElement.parentElement);
            deleteProduct(index);
        }
    });

        function addProduct() {
   
    const newProduct = {
        nama_barang: prompt('nama barang'),
        jumlah_barang: prompt('jumlah barang'),
        jenis_barang: prompt('jenis barang'),
        harga_barang: prompt('harga')
    };

    
    fetch('http://localhost/Api_crud_back_end_inv/Olah_data/createProduct', {
        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(newProduct)
    })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
            throw new Error('Failed to create the product');
        }
    })
    .then(createdProduct => {
        
        console.log('Product created:', createdProduct);

  
        productsData.push(createdProduct);

        
        displayProducts(productsData);

      
        location.reload();
    })
    .catch(error => {
        console.error('Error:', error);
    });

        }

       function editProduct(index) {
    productToEdit = productsData[index]; // Assign productToEdit here

    if (!productToEdit) {
        console.error('Product not found');
        return;
    }

    const updatedProduct = {
        id_barang: prompt('id barang:', productToEdit.id_barang),
        nama_barang: prompt('Edit nama barang:', productToEdit.nama_barang),
        jumlah_barang: prompt('Edit jumlah barang:', productToEdit.jumlah_barang),
        jenis_barang: prompt('Edit jenis barang:', productToEdit.jenis_barang),
        harga_barang: prompt('Edit harga:', productToEdit.harga_barang)
    };

    fetch(`http://localhost/Api_crud_back_end_inv/Olah_data/updateProduct/${productToEdit.id_barang}`, {
        method: "PUT",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(updatedProduct)
    })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
            throw new Error('Failed to update the product');
        }
    })
    .then(updatedProduct => {
        console.log('Product updated:', updatedProduct);
        productsData[index] = updatedProduct;
        displayProducts(productsData);
        location.reload();
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

    function deleteProduct(id) {
    const confirmation = confirm('Are you sure you want to delete this product?');
    if (confirmation) {
        
        fetch(`http://localhost/Api_crud_back_end_inv/Olah_data/deleteProduct/${id}`, {
            method: "DELETE"
        })
        .then(response => {
            if (response.ok) {
                // Remove the product from the client-side data array
                productsData = productsData.filter(product => product.id_barang !== id);
                // Refresh the table to display the updated data
                displayProducts(productsData);
                location.reload();
            } else {
                throw new Error('Failed to delete the product');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
}

        
    </script>

</body>

</html>