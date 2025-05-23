const metodopago = 'tarjeta';

switch (metodopago) {
    case 'tarjeta':
        console.log('Pago con tarjeta');
        break;
    case 'efectivo':
        console.log('Pago con efectivo');
        break;
    case 'cheque':
        console.log('Pago con cheque');
        break;
    default:
        console.log('Método de pago no válido');
        break;
}