<div class="align-content-center">
    <h1 class="display-1">{{ $title }}</h1>
    <form class="d-inline-block" action="{{$absolute_url}}/index.php?controller=usermanagement&do=showAll"
          method="POST">
        <input class="btn btn-outline-primary" type="submit" value="Zarządzaj użytkownikami">
    </form>
    <form class="d-inline-block" action="{{$absolute_url}}/index.php?controller=authuser&do=signOut" method="POST">
        <input class="btn btn-outline-danger" type="submit" value="Wyloguj się">
    </form>
</div>