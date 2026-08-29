---
title: "Upcoming Optional Chaining and Null Coalescing in JS/TS"
date: 2019-11-03
cover: /images/blog/20191103/tc39.png
---

Earlier this year, a friend from work told me that TypeScript should soon be introducing two important features: **Optional Chaining** and **Null Coalescing**. This got me pretty excited as these two features would solve some common issues that I have encountered during web development.

## What is Optional Chaining?

If you have done any form of software development, then you most definitely are aware of the necessity of utilizing null checks. Generally, the practice of null checks involves developers ensuring that variables exist before attempting to obtain attributes from the variables.

Here is an example of a null check:

```js
let myVariable;
if (a) {
  myVariable = a.b;
}
```

*Example 1 - Using an IF statement to check for null values*

In the above example, one attempts to assign **myVariable** the value **b**, which is an attribute of **a**. However, if **a** does not "exist", such as being null or undefined, then an error would occur when attempting to obtain the attribute **b**. Thus, the developer first uses an IF condition to check whether or not **a** is a [truthy](https://developer.mozilla.org/en-US/docs/Glossary/Truthy) value (anything that is not [falsy](https://developer.mozilla.org/en-US/docs/Glossary/Falsy)) before attempting to obtain the attribute **b**.

In JavaScript (and TypeScript), developers can significantly simplify the implementations of null checks by using AND operators:

```js
const myVariable = a && a.b;
```

*Example 2 - Using AND operators to check for null values*

The above logic results in the same outcome as that of Example 1. This is because JavaScript will continue to check each variable in a list of ANDed variables until falsy (opposite of truthy) value is reached before returning that value; if all of the variables are truthy, then the last variable in the list is returned.

Thus, developers have the ability to deep dive into variables while performing null checks:

```js
const myVariable = a && a.b && a.b.c && a.b.c.d && a.b.c.d.e;
```

*Example 3 - Using AND operators to check for null values in a chain of variables*

However, even with the ability to chain variables, this can become quite messy with lengthy variable names. Furthermore, chaining can increase execution time when methods are execute more than once:

```js
const myVariable = methodA && methodA() && methodA().b;
```

*Example 4 - Checking for null values from function calls*

In this example, **methodA** is executed more than once. To resolve this issue, developers would typically proxy the outcome of the method call into a new variable:

```js
const methodAOutcome = methodA && methodA();
const myVariable = methodAOutcome && methodAOutcome.b;
```

*Example 5 - Storing function calls in variables before performing null checks*

In this revised example, the outcome of the executed **methodA** is stored in a variable **methodAOutcome**; thus **methodA** only needs to be executed once.

Due to the complications of lengthy chained variables and re-executed method calls, as well as other related issues, [Ecma TC39](https://www.ecma-international.org/memento/tc39-rf-tg.htm) has begun experimenting with optional chaining.

Developers will hopefully soon be able to deep dive into variable properties by simply using a delimiter comprised of a question mark and period:

```js
const myVariable = a?.b?.c?.d?.e;
```

*Example 6 - Optional chaining*

This simple statement would yield to the same result as that of Example 3.

### Current Status

As of November 3, 2019, optional chaining is an [experimental technology](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Optional_chaining) for JavaScript:

![Optional chaining browser compatibility](/images/blog/20191103/optional_chaining_compatibility.png)

TC39 has classified optional chaining as a Stage 3 feature, meaning that "further refinement will require feedback from implementations and users", as stated in the [TC39 process document](https://tc39.es/process-document/).

TypeScript on the other hand, is in the process of introducing optional chaining as a feature as part of its upcoming TypeScript 3.7 release; the feature is currently available in TypeScript 3.7 beta. The final release for TypeScript 3.7 is [scheduled for November 5th](https://github.com/microsoft/TypeScript/issues/33352)!

## What is Null Coalescing?

In software engineering, developers often use fall-back logic in the event that a variable does not exist.

Here is an example of assigning a variable to values based on conditions defined in an IF/ELSE statement:

```js
let myVariable;
if (a) {
  myVariable = a;
}
else {
  myVariable = b;
}
```

*Example 7 - Using IF/ELSE statements to set a variable*

In the above example, the program first checks whether **a** exists (is truthy). If **a** exists, then **myVariable** is assigned to **a**; but if **a** does not exist (is falsy), then **myVariable** is assigned to the fallback value of **b**.

This logic can also be simplified using a ternary operator:

```js
const myVariable = a ? a : b;
```

*Example 8 - Using a ternary operator to assign a variable*

Although ternary operators significantly help simplify the logic of checking variable existance before executing fallback logic, it still requires a redundant call of the conditional expression. In the above example, the variable **a** needs to be called twice: once in the condition, and once in the IF_TRUE expression.

Similar to that of the previous discussion regarding the chaining of variables, using ternary operators can also result in poor performance when executing method calls:

```js
const myVariable = methodA() ? methodA() : b;
```

*Example 9 - Using a ternary operature to check values returned from function calls*

In this example, **methodA()** needs to be executed more than once. Similar to that of the chaining of variables, one could use a proxy to simplify the method call logic:

```js
const methodAOutcome = methodA();
const myVariable = methodAOutcome ? methodAOutcome : b;
```

*Example 10 - Storing function call values before assigning values in a ternary expression*

Some developers attempt to avoid the redundant conditional expression calls in ternary expressions by using the OR operator:

```js
const myVariable = a || b;
```

*Example 11 - Using OR to assign values*

Although the usage of OR operators does simplify the logic while yielding to the same outcome, I personally prefer to avoid such syntax as it can cause developers confusion when attempting to extinguish between boolean expressions and expressions that use fallback logic.

Thankfully, both TC39 and TypeScript have proposed null coalescing where developers will be able to use double quotation mark delimiters when implementing these expressions:

```js
const myVariable = a ?? b;
```

*Example 12 - Null coalescing*

One should, however, note that, for both JavaScript and TypeScript, null coalescing will only return values to the right of the double question marks only if the conditional expression to the left is **null** or **undefined**; this differs from the previously OR expression, from Example 11, that checks for ALL falsy values in its conditional expression.

### Current Status

Null coalescing is currently implemented in several languages including C#, Perl, Swift, and PHP.

As of November 3rd, 2019, TC39 has classified null coalescing as a Stage 3 feature. It seems that the proposal draft for TC39 null coalescing reflects the same functionality as those of other programming languages.

Null coalescing is also in Stage 3 for TypeScript, and is currently being ramped in TypeScript 3.7 beta. As previously mentioned, the final release is scheduled for November 5th.

## Conclusion

Overall, the introduction of optional chaining and null coalescing for JavaScript and TypeScript is truly exciting as it will resolve issues regarding code readability, prevent redundant calls, and significantly simplify software logic. The introduction of the two features in TypeScript 3.7 also demonstrates the dominance of the open-source language as it continues to evolve and expand to over [1.6 million users](https://github.com/microsoft/TypeScript).

## Relevant Links

TC39 Proposal for Optional Chaining (on GitHub):
[https://github.com/tc39/proposal-optional-chaining](https://github.com/tc39/proposal-optional-chaining)

TypeScript Proposal for Optional Chaining (on GitHub):
[https://github.com/microsoft/TypeScript/issues/16](https://github.com/microsoft/TypeScript/issues/16)

Mozilla Web Docs for Optional Chaining:
[https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Optional_chaining](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Optional_chaining)

TC39 Proposal for Optional Chaining (on GitHub):
[https://github.com/tc39/proposal-nullish-coalescing](https://github.com/tc39/proposal-nullish-coalescing)

TypeScript Proposal for Null Coalescing (on GitHub):
[https://github.com/microsoft/TypeScript/issues/26578](https://github.com/microsoft/TypeScript/issues/26578)

Roadmap for TypeScript 3.7 (on GitHub):
[https://github.com/microsoft/TypeScript/issues/33352](https://github.com/microsoft/TypeScript/issues/33352)
