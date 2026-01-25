import pyperclip
from threading import Thread

text=pyperclip.paste()


def copytofile(filename):
    with open(filename,"wt") as fd:
        fd.write(text)
        print(f"Written to {filename}")
    return "Thread run successfully"

files=[
    "admin.php",
    "ai_answers.php",
    "chat.php",
    "courses.php",
    "files.php",
    "keypoints.php",
    "pdf_files.php",
    "users.php"
]

t1s= [Thread(target=copytofile,args=(f,)) for f in files]

for x in t1s:
    x.start()
    x.join()