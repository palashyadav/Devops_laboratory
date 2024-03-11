from fastapi import FastAPI
from pydantic import BaseModel

app = FastAPI(title="Simple Tasker")


class Item(BaseModel):
    text: str


@app.get('/')
def index():
    return {"message": "Simple Tasker - ready"}


@app.post('/reverse')
def reverse_item(item: Item):
    return {"original": item.text, "reversed": item.text[::-1]}
