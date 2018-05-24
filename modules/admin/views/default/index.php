<div class="admin-default-index container">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        Это содержимое представления для действия "<?= $this->context->action->id ?>".
        Действие принадлежит контроллеру "<?= get_class($this->context) ?>"
        в "<?= $this->context->module->id ?>" модуле.
    </p>
    <p>
        Вы можете настроить эту страницу, отредактировав следующий файл:<br>
        <code><?= __FILE__ ?></code>
    </p>
</div>