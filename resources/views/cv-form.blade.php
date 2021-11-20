<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form action="{{ route('cv.make.pdf') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="name-id" class="form-label">Имя:</label>
                <input type="text" id="name-id" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label for="age-id" class="form-label">Возраст:</label>
                <input type="number" id="age-id" name="age" class="form-control">
            </div>

            <div class="mb-3">
                <label for="city-id" class="form-label">Город:</label>
                <input type="text" id="city-id" name="city" class="form-control">
            </div>

            <div class="mb-3">
                <label for="phone-id" class="form-label">Телефон:</label>
                <input type="text" id="phone-id" name="phone" class="form-control">
            </div>

            <div class="mb-3">
                <label for="email-id" class="form-label">Email:</label>
                <input type="email" id="email-id" name="email" class="form-control">
            </div>

            <div class="mb-3">
                <label for="tg-id" class="form-label">Telegram:</label>
                <input type="text" id="tg-id" name="tg" class="form-control">
            </div>

            <div class="mb-3">
                <label for="github-id" class="form-label">Github:</label>
                <input type="text"  id="github-id" name="github" class="form-control">
            </div>

            <div class="mb-3">
                <label for="objective-id" class="form-label">Цель:</label>
                <textarea id="objective-id" name="objective" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="hard-skills-id" class="form-label">Ключевые навыки:</label>
                <textarea id="hard-skills-id" name="hard-skills" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="soft-skills-id" class="form-label">О себе:</label>
                <textarea id="soft-skills-id" name="soft-skills" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="education-id" class="form-label">Образование:</label>
                <textarea id="education-id" name="education" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="ps-id" class="form-label">P.S.:</label>
                <textarea id="ps-id" name="ps" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn-dark">Создать PDF</button>
        </form>
    </div>
</body>
</html>
