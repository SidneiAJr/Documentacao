
---

## 💡 Criando um Script C#

1. Clique com o botão direito na pasta **Scripts** → **Create → C# Script**
2. Dê um nome (ex: `PlayerController.cs`)
3. Clique duas vezes para abrir no **Visual Studio** ou **VS Code**

### Exemplo simples:

```csharp
using UnityEngine;

public class PlayerController : MonoBehaviour
{
    public float speed = 5f;
    private Rigidbody rb;

    void Start()
    {
        rb = GetComponent<Rigidbody>();
    }

    void Update()
    {
        float moveX = Input.GetAxis("Horizontal");
        float moveZ = Input.GetAxis("Vertical");

        Vector3 movement = new Vector3(moveX, 0, moveZ);
        rb.MovePosition(transform.position + movement * speed * Time.deltaTime);
    }
}
