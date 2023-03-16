const router = require("express").Router();
const { Dog, User } = require("../../models");
// const withAuth = require('../../utils/auth');

// CREATE a Dog
router.post("/", async (req, res) => {
  try {
    const newDog = await Dog.create({
      ...req.body,
    });
    res.status(200).json(newDog);
  } catch (err) {
    res.status(400).json(err);
  }
});

// GET all Dogs
router.get("/", async (req, res) => {
  try {
    const dogsData = await Dog.findAll();
    res.status(200).json(dogsData);
  } catch (err) {
    res.status(500).json(err);
  }
});

// GET a single dog
router.get("/:id", async (req, res) => {
  try {
    const dogData = await Dog.findByPk(req.params.id, {
      include: [
        {
          model: User,
        },
      ],
    });
    if (!dogData) {
      res
        .status(404)
        .json({ message: "Sorry about that, no records found for this user." });
      return;
    }
    res.status(200).json(dogData);
  } catch (err) {
    res.status(500).json(err);
  }
});

// DELETE a Dog
router.delete("/:id", async (req, res) => {
  try {
    const dogData = await Dog.destroy({
      where: {
        id: req.params.id,
      },
    });

    if (!dogData) {
      res
        .status(404)
        .json({ message: "Sorry about that, no records found for this User" });
      return;
    }

    res.status(200).json(dogData);
  } catch (err) {
    res.status(500).json(err);
  }
});
module.exports = router;
