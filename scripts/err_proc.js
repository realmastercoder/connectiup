const err = new URLSearchParams(window.location.search).get('err');

switch (err) {
    case '1':
        alert('Error 1: invalid username or password');
        break;
    case '2':
        alert('Error 2: passwords do not match');
        break;
    case '3':
        alert('Error 3: Must have an iup email');
        break;
    case '4':
        alert('Error 4: Username already exists');
        break;
    case '5':
        alert('Error 5: Email already exists');
        break;
    case '6':
        alert('Error 6: An unknown error occurred, please try again');
        break;
    case '7':
        alert('Welcome to ConnectIUP! Please log in to continue');
        break;
    default:
        // Do nothing
}