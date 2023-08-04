<?
public function hellodworld() {
        echo '<h1>Контакты</h1>';
        echo '<form action="/contacts" metod="POST">
        <input name="phone" placeholder="Телефон">
        <input type="hidden" name="_token" value=".csrf_token().">
            <button type="submit">Отправить</button><br><p>

            <button type="submit">Отправить заявку</button>
            </form>';
            
    }
    public function hellodworld(Request $request) {
        echo 'Вы успешно отправили заявку';
        echo 'Ваш номер телефона: ' .$request->phone;
    }

    public function shouViewHelloWorld() {
        return view('hello', ['a' =>2]);
    }
