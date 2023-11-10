import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// document.querySelectorAll(".cart_update").forEach(function (element) {

//     element.addEventListener("click", function (e) {
//         e.preventDefault();

//         var quantity = parseInt(this.nextElementSibling.innerHTML.trim()); // Extract the quantity value
//         console.log(quantity);
//         var path = "{{ route('cart_update') }}";
//         axios({
//             method: "PATCH",
//             url: '',
//             data: {
//                 quantity: quantity,
//             },
//         })

//         // var formData = new FormData();
//         // formData.append('_token', csrfToken);
//         // formData.append('id', ele.closest('div').getAttribute('data-id')); // Adjust the selector as needed
//         // formData.append('quantity', quantity); // Use the extracted quantity value

//         // fetch(updateCartRoute, {
//         //     method: 'PATCH',
//         //     body: formData,
//         //     headers: {
//         //         'X-CSRF-TOKEN': csrfToken,
//         //     },
//         // })
//         //     .then(function (response) {
//         //         if (response.ok) {
//         //             return response.json();
//         //         }
//         //         throw new Error('Network response was not ok.');
//         //     })
//         //     .then(function (data) {
//         //         // Handle success response here
//         //         window.location.reload();
//         //     })
//         //     .catch(function (error) {
//         //         // Handle errors here
//         //         console.error(error);
//         //     });
//     });
// });