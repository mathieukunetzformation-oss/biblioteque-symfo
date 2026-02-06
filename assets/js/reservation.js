

document.addEventListener('turbo:load', () => {
    console.log("Test")
    const reservationInput = document.querySelector('#reservation_date_reservation');
    const returnInput = document.querySelector('#reservation_date_expectedReturn');

    if (!reservationInput || !returnInput) {
        return;
    }

    reservationInput.addEventListener('change', () => {

        console.log("Date changed")
        if (!reservationInput.value) {
            returnInput.value = '';
            return;
        }

        const date = new Date(reservationInput.value);
        date.setDate(date.getDate() + 14);

        const yyyy = date.getFullYear();
        const mm = String(date.getMonth() + 1).padStart(2, '0');
        const dd = String(date.getDate()).padStart(2, '0');

        returnInput.value = `${yyyy}-${mm}-${dd}`;
    });
});