<x-layout title="Nova Série">
    <div class="mb-3">
    <form action="" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input  class="form-control mb-3" type="text" id="name" name="name" placeholder="Informe o seu nome">
        <button class="btn btn-primary" type="submit">Adcionar</button>
    </form>
</div>
</x-layout>