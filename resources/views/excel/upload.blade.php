<form action="{{ route('excel.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="excel_file" accept=".xlsx,.xls,.csv" required>
    <button type="submit">Загрузить</button>
</form>