<?php include_once '../../include/data/database-cursos.php'; ?>


<div class="cointainer">

	<div class="page-header">
		<h2>Gerenciar <small>Turmas</small></h2>
	</div>

	<table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Curso</th>
            <th>Período</th>
            <th>Instrutor</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>

        <?php if(listaCursos()) : ?>

        <?php foreach (listaCursos() as $turma) : ?>

            <tr>
                <th scope="row"><?php echo $turma['id']; ?></th>
                <td><?php echo $turma['curso']; ?></td>
                <td><?php echo $turma['periodo']; ?></td>
                <?php $instrutores = array('1' => 'Lucas', '2' => 'João', '3' => 'Gabriel' ); ?>
                <?php foreach ($instrutores as $key => $value) :?>
                    <?php if ($turma['instrutor'] == $key): ?>
                        <td><?php echo $value ?></td>
                    <?php endif; ?>
                <?php endforeach; ?>                
                <td>
                	<a class="btn btn-info" href="/500/aula05/admin/turmas/edit.php?id=<?php echo $turma['id']; ?>" role="button"><span class="glyphicon glyphicon-edit"></span> Editar</a>
                	<form action="/500/aula05/admin/turmas/delete.php" method="post" class="action-delete">
                        <input type="hidden" name="id" value="<?php echo $turma['id']; ?>">
                        <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Excluir</button>
                    </form>
                </td>
            </tr>

        <?php endforeach; ?>

        <?php endif; ?>

        </tbody>
    </table>

	<div class="pull-right">
    	<a class="btn btn-primary" href="/500/aula05/admin/turmas/new.php" role="button"><span class="glyphicon glyphicon-plus"></span> Novo</a>
	</div>
	
	<div class="clearfix"></div>
	
</div>

<?php include_once '../layout/_rodape.php'; ?>