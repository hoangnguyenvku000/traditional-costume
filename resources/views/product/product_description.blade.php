<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="php/css/product_description.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

    @include ('header_footer.header')

<body>
    <br><br><br><br><br><br>

    <div class="container">


        <div class="product-details">
            <div class="product-image-gallery">
                <div class="carousel">
                    <span class="arrow prev" onclick="prevImage()">&#8249;</span> <!-- Left arrow -->
                    <img id="productImage" src="" alt="Product Image">
                    <span class="arrow next" onclick="nextImage()">&#8250;</span> <!-- Right arrow -->
                </div>
                <div class="thumbnail-container">
                    <img class="thumbnail" src="php/img/product/img1.jpg" onclick="setImage('php/img/product/img1.jpg')" alt="Thumbnail 1">
                    <img class="thumbnail" src="php/img/product/img2.jpg" onclick="setImage('php/img/product/img2.jpg')" alt="Thumbnail 2">
                    <img class="thumbnail" src="php/img/product/img3.jpg" onclick="setImage('php/img/product/img3.jpg')" alt="Thumbnail 3">
                </div>
            </div>
            
            <div class="product-info">
                <h1 id="productName">Product Name</h1>
                <p id="productPrice">Price</p>
                <p id="productDescription">Product Description: This is a beautiful and traditional Vietnamese garment made from luxurious silk fabric. Perfect for both casual and formal wear.</p>

                <!-- Product Tags -->
                <div class="product-tags">
                    <strong>Tags:</strong>
                    <ul>
                        <li>Traditional Wear</li>
                        <li>Silk</li>
                        <li>Áo Dài</li>
                        <li>Formal Wear</li>
                        <li>Unisex</li>
                    </ul>
                </div>

                <!-- Add to Cart Button -->
                <button class="add-to-cart-btn" onclick="addToCart()">Add to Cart</button>
            </div>
        </div>
    </div>

    <script>
        const products = [
            {
                id: 1,
                name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
                price: "690.000₫",
                description: "This is a beautiful and traditional Vietnamese garment made from luxurious silk fabric. Perfect for both casual and formal wear.",
                images: [
                    "php/img/product/img1.jpg",
                    "php/img/product/img2.jpg",
                    "php/img/product/img3.jpg"
                ],
                tags: ["Traditional Wear", "Silk", "Áo Dài", "Formal Wear", "Unisex"]
            },
            {
                id: 2,
                name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
                price: "690.000₫",
                description: "This is a beautiful and traditional Vietnamese garment made from luxurious silk fabric. Perfect for both casual and formal wear.",
                images: [
                    "php/img/product/img1.jpg",
                    "php/img/product/img2.jpg",
                    "php/img/product/img3.jpg"
                ],
                tags: ["Traditional Wear", "Silk", "Áo Dài", "Formal Wear", "Unisex"]
            },{
                id: 3,
                name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
                price: "690.000₫",
                description: "This is a beautiful and traditional Vietnamese garment made from luxurious silk fabric. Perfect for both casual and formal wear.",
                images: [
                    "php/img/product/img1.jpg",
                    "php/img/product/img2.jpg",
                    "php/img/product/img3.jpg"
                ],
                tags: ["Traditional Wear", "Silk", "Áo Dài", "Formal Wear", "Unisex"]
            },
            {
                id: 4,
                name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
                price: "690.000₫",
                description: "This is a beautiful and traditional Vietnamese garment made from luxurious silk fabric. Perfect for both casual and formal wear.",
                images: [
                    "php/img/product/img1.jpg",
                    "php/img/product/img2.jpg",
                    "php/img/product/img3.jpg"
                ],
                tags: ["Traditional Wear", "Silk", "Áo Dài", "Formal Wear", "Unisex"]
            },
            {
                id: 5,
                name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
                price: "690.000₫",
                description: "This is a beautiful and traditional Vietnamese garment made from luxurious silk fabric. Perfect for both casual and formal wear.",
                images: [
                    "php/img/product/img1.jpg",
                    "php/img/product/img2.jpg",
                    "php/img/product/img3.jpg"
                ],
                tags: ["Traditional Wear", "Silk", "Áo Dài", "Formal Wear", "Unisex"]
            },{
                id: 6,
                name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
                price: "690.000₫",
                description: "This is a beautiful and traditional Vietnamese garment made from luxurious silk fabric. Perfect for both casual and formal wear.",
                images: [
                    "php/img/product/img1.jpg",
                    "php/img/product/img2.jpg",
                    "php/img/product/img3.jpg"
                ],
                tags: ["Traditional Wear", "Silk", "Áo Dài", "Formal Wear", "Unisex"]
            },
            // Other products...
        ];

        let currentImageIndex = 0;
        let currentProduct = {};

        function getProductDetails() {
    const params = new URLSearchParams(window.location.search);
    const productId = parseInt(params.get('id'));
    currentProduct = products.find(p => p.id === productId);

    if (currentProduct) {
        setImage(currentProduct.images[0]);
        document.getElementById('productName').innerText = currentProduct.name;
        document.getElementById('productPrice').innerText = currentProduct.price;
        document.getElementById('productDescription').innerText = currentProduct.description;
        
        const tagsContainer = document.querySelector('.product-tags ul');
        tagsContainer.innerHTML = '';
        currentProduct.tags.forEach(tag => {
            const li = document.createElement('li');
            const a = document.createElement('a'); // Create an anchor tag
            a.textContent = tag;
            a.href = "#"; // Temporary href, can be updated to something meaningful
            a.classList.add('clickable-tag'); // Add a class for styling
            a.onclick = function() {
                alert(`Tag clicked: ${tag}`);
                // Future functionality can be added here
            };
            li.appendChild(a);
            tagsContainer.appendChild(li);
        });
    }
}

        function setImage(image) {
            document.getElementById('productImage').src = image;
        }

        function nextImage() {
            if (currentImageIndex < currentProduct.images.length - 1) {
                currentImageIndex++;
            } else {
                currentImageIndex = 0;
            }
            setImage(currentProduct.images[currentImageIndex]);
        }

        function prevImage() {
            if (currentImageIndex > 0) {
                currentImageIndex--;
            } else {
                currentImageIndex = currentProduct.images.length - 1;
            }
            setImage(currentProduct.images[currentImageIndex]);
        }

        function addToCart() {
            alert(`${currentProduct.name} has been added to your cart!`);
            // Here you can add the functionality to update the cart in your application
        }

        window.onload = getProductDetails;
    </script>
    <?php include('view/product.php') ?>
    <?php include('view/footer.php') ?>
</body>

</html>
