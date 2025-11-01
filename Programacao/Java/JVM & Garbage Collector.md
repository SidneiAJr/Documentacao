# JVM & Garbage Collector

## 📌 Introdução
A JVM é responsável por **executar, otimizar e gerenciar memória** em aplicações Java.  
Entender sua arquitetura distingue um desenvolvedor pleno de um sênior.

---

## 🧠 Estrutura da JVM

### Runtime Areas
- **Stack** — variáveis e chamadas de métodos
- **Heap** — objetos
- **Metaspace** — metadados de classes
- **PC Register** — controle da thread
- **Native Method Stack** — código nativo

---

## 🧩 Gerenciamento de Memória

### Heap
- Young Generation
  - Eden  
  - Survivor Spaces
- Old Generation (Tenured)

Objetos começam no **Eden** → sobrevivem → vão para **Old Gen**

---

## 🧹 Garbage Collector

### Tipos
- Serial GC — simples, single-threaded
- Parallel GC — multi-thread, focado em throughput
- CMS (legado) — pausas menores
- G1 GC — padrão atual para servidores
- ZGC — pausas extremamente curtas
- Shenandoah — baixa latência

---

## ⚙️ Conceitos importantes
- **Stop-the-World** — pausas inevitáveis
- **Compacting** — reorganiza memória
- **Promotion** — objetos promovidos para Old Gen
- **Finalization** — deve ser evitado

---

## 🎯 Boas práticas
- Evitar criação excessiva de objetos
- Preferir imutabilidade
- Reusar objetos pesados
- Monitorar heap e GC

Ferramentas úteis:
- Java Flight Recorder
- JDK Mission Control
- VisualVM

> Entender a JVM = performance e estabilidade profissional.
