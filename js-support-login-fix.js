if (document.getElementsByClassName('js-ticket-login-btn').length > 0)
{
    document.getElementsByClassName('js-ticket-login-btn')[0].attributes["href"].value="https://web.msh-lse.fr/support/wp-login.php?redirect_to="+encodeURIComponent(window.location.href);
}
