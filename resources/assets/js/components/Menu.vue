<template>
<div>
	<form action="#" method="get" class="sidebar-form">
		<div class="input-group">
			<input type="text" class="form-control" v-model="query" placeholder="Pesquisar...">
			<span class="input-group-btn">
				<button type="submit" name="search" id="search-btn"
					class="btn btn-flat"><i class="fa fa-search"></i>
				</button>
			</span>
		</div>
	</form>

	<ul class="sidebar-menu">
		<li class="header">MENU DE NAVEGAÇÃO</li>
		<slot></slot>
	</ul>
</div>
</template>
