class Pagination {
    constructor(products, itemsPerPage) {
        this.products = products; // Array of products
        this.itemsPerPage = itemsPerPage; // Number of items per page
        this.currentPage = 1; // Start on the first page
        this.productContainer = document.querySelector('.list-item');
        this.paginationContainer = document.querySelector('.pagination');

        // Initialize the display
        this.displayProducts();
    }

    // Method to display products for the current page
    displayProducts() {
        // Clear existing content in the product container
        this.productContainer.innerHTML = '';
    
        // Calculate start and end indices for the current page
        const startIndex = (this.currentPage - 1) * this.itemsPerPage;
        const endIndex = startIndex + this.itemsPerPage;
    
        // Get the products for the current page
        const currentProducts = this.products.slice(startIndex, endIndex);
    
        // Loop through the current products array and create product elements
        currentProducts.forEach((product, index) => {
            const productItem = document.createElement('div');
            productItem.classList.add('item');
    
            // Adding a click event to navigate to the product details page
            productItem.addEventListener('click', () => {
                window.location.href = `product_description.php?id=${startIndex + index + 1}`;
            });
    
            productItem.innerHTML = `
                <img src="${product.image}" alt="${product.name}">
                <h4>${product.name}</h4>
                <p>${product.price}</p>
            `;
    
            // Append each product item to the product container
            this.productContainer.appendChild(productItem);
        });
    
        // Update pagination controls
        this.updatePagination();
    }

    // Method to update pagination controls
    updatePagination() {
        // Clear existing pagination
        this.paginationContainer.innerHTML = '';

        const totalPages = Math.ceil(this.products.length / this.itemsPerPage);

        // Create previous button
        const prevButton = document.createElement('button');
        prevButton.innerText = 'Previous';
        prevButton.disabled = this.currentPage === 1;
        prevButton.classList.add('pagination-button'); // Add a class for styling
        prevButton.addEventListener('click', () => {
            if (this.currentPage > 1) {
                this.currentPage--;
                this.displayProducts();
            }
        });
        this.paginationContainer.appendChild(prevButton);

        // Create page number buttons
        for (let i = 1; i <= totalPages; i++) {
            const pageButton = document.createElement('button');
            pageButton.innerText = i;
            pageButton.classList.add('page-btn', 'pagination-button'); // Add a class for styling
            if (i === this.currentPage) {
                pageButton.disabled = true; // Disable button for current page
            }
            pageButton.addEventListener('click', () => {
                this.currentPage = i;
                this.displayProducts();
            });
            this.paginationContainer.appendChild(pageButton);
        }

        // Create next button
        const nextButton = document.createElement('button');
        nextButton.innerText = 'Next';
        nextButton.disabled = this.currentPage === totalPages;
        nextButton.classList.add('pagination-button'); // Add a class for styling
        nextButton.addEventListener('click', () => {
            if (this.currentPage < totalPages) {
                this.currentPage++;
                this.displayProducts();
            }
        });
        this.paginationContainer.appendChild(nextButton);
    }
}

// Initialize pagination on DOM load
document.addEventListener("DOMContentLoaded", () => {
    const products = [
        {
            name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
            price: "690.000₫",
            image: "php/img/product/img1.jpg"
        },
        {
            name: "Áo ngũ thân cách tân viền lục giác (Unisex)",
            price: "390.000₫",
            image: "php/img/product/img2.jpg"
        },
        {
            name: "Áo Ngũ Thân cách tân Xuân Hiểu",
            price: "890.000₫",
            image: "php/img/product/img3.jpg"
        },
        // Add more products here as needed
        {
            name: "Áo mới 1",
            price: "500.000₫",
            image: "php/img/product/img3.jpg"
        },
        {
            name: "Áo mới 2",
            price: "450.000₫",
            image: "php/img/product/img3.jpg"
        },
        {
            name: "Áo mới 3",
            price: "300.000₫",
            image: "php/img/product/img3.jpg"
        },
        {
            name: "Áo mới 3",
            price: "300.000₫",
            image: "php/img/product/img3.jpg"
        }
    ];
    
    // Create an instance of the Pagination class
    new Pagination(products, 4); // Display 2 products per page
});
