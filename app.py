from flask import Flask, render_template, request, redirect, url_for

app = Flask(__name__)
tasks = []

@app.route('/', methods=['GET', 'POST'])
def home():
    if request.method == 'POST':
        task = request.form['task']
        tasks.append(task)
        return redirect(url_for('home'))
    return render_template('home.php', tasks=tasks)

@app.route('/delete/<int:index>')
def delete_task(index):
    tasks.pop(index)
    return redirect(url_for('home'))

if __name__ == '__main__':
    app.run(debug=True)
