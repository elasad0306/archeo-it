
from fastapi import FastAPI
from pydantic import BaseModel, json
from fastapi.middleware.cors import CORSMiddleware
import random


class Password(BaseModel):
    size : int
    complexity : str

app = FastAPI()

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

letter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
number = '0123456789'
special_char = '!@#$%^&*_-+=()[]|:<>?/'

def alpha_only(size, letter):
    return "".join(random.choice(letter) for i in range(size))

def alpha_num(size, number, letter):
    alphanum = letter + number
    return "".join(random.choice(alphanum) for i in range(size))


def alpha_num_char(size, number, special_char, letter):
    alphanumChar = letter + number + special_char
    return "".join(random.choice(alphanumChar) for i in range(size))



@app.post("/password")
async def generate(request: Password):
    password = ""
    if request.complexity == "alpha":
        password = alpha_only(request.size, letter)
    elif request.complexity == "alphaNum":
        password = alpha_num(request.size, letter, number)
    elif request.complexity == "alphaNumChar":
        password = alpha_num_char(request.size, number, special_char, letter)
    else:
        print("Error")
    return {"Password" : password}