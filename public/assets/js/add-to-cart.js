//adding to cart
// Function to update the cart count in the header
function updateCartCount(count) {
    const cartCountElement = document.querySelector(".cart-count");
    cartCountElement.textContent = count;
}

document.addEventListener("DOMContentLoaded", function () {
    let cartCount = 0;

    // Add event listener to the "Add to Cart" button
    const addToCartButton = document.getElementById("addToCartButton");
    addToCartButton.addEventListener("click", function () {
        // Increment the cart count when the button is clicked
        cartCount++;
        updateCartCount(cartCount);
    });
});
