<!DOCTYPE html>
<html>
  <head>
    <title>Gerenciador de Tarefas</title>
  </head>
  <body>
    <h1>Adicionar Tarefa</h1>
    <form action="/" method="post">
      <input type="text" name="task" id="task">
      <input type="submit" value="Adicionar">
    </form>
     <h1>Tarefas</h1>
    <ul>
      {% for task in tasks %}
        <li>{{ task }} <a href="/delete/{{ loop.index0 }}">(Excluir)</a></li>
      {% endfor %}
    </ul>
  </body>
</html>
