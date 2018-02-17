<?php include_once '../layout/_topo.php'; ?>
<?php require_once '../../include/data/database-cursos.php'; ?>



<div class="cointainer">

    <div class="page-header">
        <h2>Gerenciar <small>Cursos</small></h2>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Curso</th>
            <th>Tipo</th>
            <th>Carga Horária</th>
            <th>Requisitos</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>

        <?php if(listaCursos()) : ?>
        <?php foreach (listaCursos() as $curso) : ?>

            <tr>
                <th scope="row"><?php echo $curso['id']; ?></th>
                <td><?php echo $curso['nome']; ?></td>
                <td><?php echo $curso['tipo']; ?></td>
                <td><?php echo $curso['carga_horaria']; ?></td>
                <td><?php echo $curso['requisitos']; ?></td>
                <td>
                    <a class="btn btn-info" href="/500/aula05/admin/cursos/edit.php?id=<?php echo $curso['id']; ?>" role="button"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                    <form action="/DexterEscola/admin/cursos/delete.php" method="post" class="action-delete">
                        <input type="hidden" name="id" value="<?php echo $curso['id']; ?>">
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Excluir</button>
                    </form>
                </td>
            </tr>

        <?php endforeach; ?>
        <?php endif; ?>

        </tbody>
    </table>

    <div class="pull-right">
        <a class="btn btn-primary" href="/500/aula05/admin/cursos/new.php" role="button"><span class="glyphicon glyphicon-plus"></span> Novo</a>
    </div>
    
    <div class="clearfix"></div>
    
</div>

<?php include_once '../layout/_rodape.php'; ?>