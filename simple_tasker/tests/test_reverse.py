from fastapi.testclient import TestClient
from app import app


client = TestClient(app)


def test_index():
    r = client.get('/')
    assert r.status_code == 200


def test_reverse():
    r = client.post('/reverse', json={'text': 'abc'})
    assert r.status_code == 200
    assert r.json()['reversed'] == 'cba'
