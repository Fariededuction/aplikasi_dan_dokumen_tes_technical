let productsData = [];
    let productToEdit; 
    function fetchAndDisplayProducts() {
        fetch('http://localhost/Api_crud_back_end_inv/Olah_data/readProducts')
            .then((res) => res.json())
            .then((data) => {
                productsData = data;
                displayProducts(data);
            });
    }

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

    document.addEventListener('DOMContentLoaded', function () {
        fetchAndDisplayProducts();

        document.getElementById('addProductButton').addEventListener('click', addProduct);
    });

    function toggleAddProductForm() {
        $('#addProductFormContainer').modal('toggle');
    }

    function addProduct() {
        
        const newProduct = {
            nama_barang: document.getElementById('nama_barang').value,
            jumlah_barang: document.getElementById('jumlah_barang').value,
            jenis_barang: document.getElementById('jenis_barang').value,
            harga_barang: document.getElementById('harga_barang').value
        };

        // Send the product data to the server for processing (you can use fetch)
        fetch('http://localhost/Api_crud_back_end_inv/Olah_data/createProduct', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(newProduct),
        })
            .then((response) => {
                if (response.ok) {
                    return response.json();
                } else {
                    throw new Error('Failed to create the product');
                }
            })
            .then((createdProduct) => {
                console.log('Product created:', createdProduct);

                productsData.push(createdProduct);

                displayProducts(productsData);
              
                // Close the modal
                toggleAddProductForm();
                location.reload();
            })
            .catch((error) => {
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
            harga_barang: prompt('Edit harga:', productToEdit.harga_barang),
        };

        fetch(`http://localhost/Api_crud_back_end_inv/Olah_data/updateProduct/${productToEdit.id_barang}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(updatedProduct),
        })
            .then((response) => {
                if (response.ok) {
                    return response.json();
                } else {
                    throw new Error('Failed to update the product');
                }
            })
            .then((updatedProduct) => {
                console.log('Product updated:', updatedProduct);
                productsData[index] = updatedProduct;
                displayProducts(productsData);
                location.reload();
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }

    function deleteProduct(id) {
        const confirmation = confirm('Are you sure you want to delete this product?');
        if (confirmation) {
            fetch(`http://localhost/Api_crud_back_end_inv/Olah_data/deleteProduct/${id}`, {
                method: 'DELETE',
            })
                .then((response) => {
                    if (response.ok) {
                        // Remove the product from the client-side data array
                        productsData = productsData.filter((product) => product.id_barang !== id);
                        // Refresh the table to display the updated data
                        displayProducts(productsData);
                        location.reload();
                    } else {
                        throw new Error('Failed to delete the product');
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }
    }