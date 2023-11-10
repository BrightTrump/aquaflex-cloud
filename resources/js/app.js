import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.data('cart', () => ({
    cartUpdate(quantity, productId, path, csrf_token) {
        axios.patch(path, {
            id: productId,
            quantity: quantity
        }, {
            headers: {
                'X-CSRF-TOKEN': csrf_token
            }
        }).then((res) => {
            window.location.reload();
        })
    },
    cartRemove(path, csrf_token) {
        if (confirm('Do you really want to remove?')) {
            axios.delete(path,{
                headers: {
                    'X-CSRF-TOKEN': csrf_token
                }
            }).then((res) => {
                window.location.reload();
            })
        }
    }
}))

Alpine.start();

