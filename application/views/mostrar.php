<div class="container">
    <div class="well">
	<div class="legend">
            <legend>
                <strong>Album</strong>
                <!-- Botões -->
                <div class="pull-right hidden-phone">
                    <a href="<?php echo site_url('mostrar'); ?>"  class="btn btn-warning"><i class="fa fa-arrow-left "></i> Mostrar</a>				
                    <a href="<?php echo site_url('edit'); ?>"  class="btn btn-warning"><i class="fa fa-arrow-left "></i> Editar</a>				
                </div>
            </legend>
	</div>

            <!-- Mensagem que aparece quando se existe filtro -->
           

	<!-- Quantidade de Itens Listados -->
	<?php if (count($query) > 0) { ?>
		
            <!-- Ordenação -->
            <div class="col-md-6 col-xs-6">
                <?php $this->ordenacao->monta_ordenacao($itens_ordenacao, $ordenacao); ?>
            </div>
            <!-- Tabela -->	
            <div class="col-md-6 col-xs-6 text-center">			
                <?php $this->paginacao->paginacao_header($count, $fim, $skip); ?>
            </div>

            <!-- Tabela -->	
            <table class="table table-striped table-bordered table-hover" style="font-size: 12px;">
                <thead>
                    <tr>
                        <td class="text-center"><strong>Album</strong></td>
                        <td class="text-center"><strong>Artista</strong></td>
                        <td class="text-center"><strong>Playlist</strong></td>
                        <td class="text-center"><strong>Nome da música</strong></td>
                        <td class="text-center"><strong>Compositor</strong></td>
                        <td class="text-center"><strong>Duração</strong></td>
                        <td class="text-center"><strong>Bytes</strong></td>
                        <td class="text-center"><strong>Preço unitário</strong></td>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($query as $row) { ?>
                    <tr onclick="editar album('<?php echo trim($row->AlbumId); ?>')">
                        <td><?php echo utf8_encode(strtoupper($row->Title)); ?></td>
                        <td><?php echo utf8_encode(strtoupper($row->ArtistId)); ?></td>
                    </tr>    
                    <tr onclick="editar artista('<?php echo trim($row->ArtistId); ?>')">
                        <td><?php echo utf8_encode(strtoupper($row->Name)); ?></td>
                    </tr>
                    <tr onclick="editar playlist('<?php echo trim($row->PlaylistId); ?>')">
                        <td><?php echo utf8_encode(strtoupper($row->Name)); ?></td>
                    </tr>
                    <tr onclick="editar música('<?php echo trim($row->TrackId); ?>')">
                        <td><?php echo utf8_encode(strtoupper($row->Name)); ?></td>
                        <td><?php echo utf8_encode(strtoupper($row->AlbumId)); ?></td>
                        <td><?php echo utf8_encode(strtoupper($row->Composer)); ?></td>
                        <td><?php echo utf8_encode(strtoupper($row->Miliseconds)); ?></td>
                        <td><?php echo utf8_encode(strtoupper($row->Bytes)); ?></td>
                        <td><?php echo utf8_encode(strtoupper($row->UnitPrice)); ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        <?php } ?>
    </div>        
</div>