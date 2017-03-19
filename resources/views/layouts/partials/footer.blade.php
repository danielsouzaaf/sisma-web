<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Versão</b> {{ trim(exec('git log --pretty="%h" -n1 HEAD')) }}
    </div>
    <strong>Copyright &copy; 2016-{{ date('Y') }} <a href="#">{{ env('APP_NAME') }}</a>.</strong> Todos os direitos reservados.
</footer>
